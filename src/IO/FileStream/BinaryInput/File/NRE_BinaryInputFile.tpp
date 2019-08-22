
    /**
     * @file NRE_BinaryInputFile.tpp
     * @brief Implementation of Engine's IO's Object : BinaryInputFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline BinaryInputFile::BinaryInputFile(File const& p) : InputFile(p) {
            }

            inline std::ios_base::openmode BinaryInputFile::getMode() const {
                return std::ios::in | std::ios::binary;
            }

            inline std::fstream& BinaryInputFile::getStream() {
                return InputFile::getStream();
            }
        }
    }
