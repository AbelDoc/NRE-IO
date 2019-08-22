
    /**
     * @file NRE_InputFile.tpp
     * @brief Implementation of Engine's IO's Object : InputFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline InputFile::InputFile(File const& p) : FileStream::FileStream(p) {
            }

            inline std::ios_base::openmode InputFile::getMode() const {
                return std::ios::in;
            }

            inline std::fstream& InputFile::getStream() {
                return FileStream::getStream();
            }

        }
    }
